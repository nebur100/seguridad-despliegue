pipeline {
    agent any
    environment {
        // Aquí definimos que usaremos la credencial que crearemos luego en Jenkins
        ROOT_PASSWORD = credentials('mysql-root-password')
    }
    stages {
        stage('Limpieza') {
            steps {
                // Borra contenedores antiguos para que no haya conflictos [cite: 90]
                sh 'docker compose down --remove-orphans'
            }
        }
        stage('Despliegue seguro') {
            steps {
                // Levanta los nuevos contenedores en modo segundo plano [cite: 95]
                sh 'docker compose up --build -d'
            }
        }
    }
}
