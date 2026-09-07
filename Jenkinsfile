pipeline {
    agent any
    stages {
        stage('Checkout Code') {
            steps {
                checkout scm
            }
        }
        stage('Deploy Production') {
            when {
                branch 'main'
            }
            steps {
                echo "Pushing To Production"
                withCredentials([
                    sshUserPrivateKey(credentialsId: 'prod-server-ssh', keyFileVariable: 'SSH_KEY'),
                    string(credentialsId: 'prod-server-ip', variable: 'SERVER_IP'),
                    string(credentialsId: 'prod-server-user', variable: 'SSH_USER'),
                    string(credentialsId: 'prod-server-path', variable: 'DEPLOY_PATH')
                ]) {
                    sh """
                        rsync -avz --delete \
                            --exclude='.git' \
                            --exclude='.env' \
                            -e "ssh -i \$SSH_KEY -o StrictHostKeyChecking=no" \
                            ./ \$SSH_USER@\$SERVER_IP:\$DEPLOY_PATH/
                    """
                }
            }
        }
        // stage('Build & Deploy Dev') {
        //     when {
        //         branch 'dev'
        //     }
        //     steps {
        //         echo "Push terdeteksi di branch DEV. Deploy ke DEV..."
        //         withCredentials([
        //             sshUserPrivateKey(credentialsId: 'dev-ssh-key', keyFileVariable: 'SSH_KEY', usernameVariable: 'SSH_USER'),
        //             string(credentialsId: 'dev-server-ip', variable: 'SERVER_IP'),
        //             string(credentialsId: 'dev-deploy-path', variable: 'DEPLOY_PATH')
        //         ]) {
        //             sh """
        //                 rsync -avz --delete \
        //                     --exclude='.git' \
        //                     --exclude='.env' \
        //                     -e "ssh -i \$SSH_KEY -o StrictHostKeyChecking=no" \
        //                     ./ \$SSH_USER@\$SERVER_IP:\$DEPLOY_PATH/
        //             """
        //         }
        //     }
        // }
    }
    post {
        success {
            echo "Success — Branch ${env.BRANCH_NAME} (build #${env.BUILD_NUMBER})"
        }
        failure {
            echo "Failed — Branch ${env.BRANCH_NAME} (build #${env.BUILD_NUMBER})"
        }
        always {
            echo "Pipeline Complete In : ${new Date()}"
        }
    }
}