pipeline {
    agent any
    stages {
        stage('Checkout Code') {
            steps {
                checkout scm
            }
        }
        stage('Build & Deploy Production') {
            when {
                branch 'main'
            }
            steps {
                echo "Push terdeteksi di branch MAIN. Menjalankan proses untuk production..."
                // sh 'php -v'
            }
        }
        // stage('Build & Deploy Prod') {
        //     when {
        //         branch 'main'
        //     }
        //     steps {
        //         echo "Push terdeteksi di branch DEV. Menjalankan proses untuk dev..."
        //         sh 'php -v'
        //         // sh 'cp .env.dev .env && composer install'
        //     }
        // }

       
    }
}