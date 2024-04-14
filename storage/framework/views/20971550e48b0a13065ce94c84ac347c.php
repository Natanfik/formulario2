<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <style>

        body{
            background-image: url("https://img.freepik.com/vetores-gratis/fundo-de-solsticio-de-inverno-em-aquarela_23-2149177804.jpg");
            background-repeat:no-repeat;
            background-size: 100%;

        }

        .login-container {
                background-color: rgba(255, 255, 255, 0.4);
                width: 400px;
                align-items: center;
                margin: 0 auto; 
                max-width: 600px;
                border:none;
                border-radius: 4px;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                text-align: center;
            }   

        .login-container h2 {
            text-align: center;
        }

        

        .login-container input,
        .login-container textarea,
        .login-container button {
            background-color: rgba(255, 255, 255, 0.4);
            display: block;
            margin: 10px 0;
            width: 100%;
            padding: 10px;
            border-radius:12px;
            border:1px solid #ccc;
            font-size: 16px;

        }

        .login-container {
            background-color: rgba(255, 255, 255, 0.4);
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
            width: 300px;
        }
        

        .login-form {
            display: flex;
            flex-direction: column;
        }
        
        .login-form input {
            width:93%;
            padding: 10px;
            border-radius:12px;
            border:1px solid #ccc;

        }

        .login-form input:hover {
            background-color:transparent;
            border:1px solid #ccc;
        }
        
        .login-form button {
            opacity:0.9;
            margin-top:15px;
            padding: 10px;
            background-color: #5e7e46;
            color: white;
            border: none;
            border-radius:12px;
            cursor: pointer;
        }

        .cancelar {
            font-weight: 600;
            text-align: center;
            width: 93%;
            margin-top:15px;
            padding: 10px;
            background-color: #fff;
            color: #333;
            border: 1px solid #808080;
            border-radius:12px;
            cursor: pointer;
            transition: border 0.3s ease;
            text-decoration: none
        }
        .cancelar:hover {
            border: 1px solid #333;
      
        }
        
    </style>
</head>
<body>
    <form action="<?php echo e(route('cliente.store')); ?>" method="POST">
        <div class="login-container">
            <h2>Cadastrar Cliente</h2>
            <div class="login-form">
                <?php echo csrf_field(); ?>
                <input type="text" name="nome" id="username" placeholder="Nome Completo">
                <input type="text" name="email" id="username" placeholder="E-mail">
                <input type="text" name="cpf" id="username" placeholder="CPF">
                <button type="submit" value="Enviar">Salvar</button>
                <a class="cancelar" href="<?php echo e(route('cliente.index')); ?>">Cancelar</a>
            </div>
        </div>
    </form>

    <script>
        // Função para formatar CPF com pontos e traço
        function formatarCPF(cpf) {
            // Verifica se o CPF está no formato padrão (apenas números)
            if (/^\d{11}$/.test(cpf)) {
                // Adiciona os pontos e traço
                return cpf.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, '$1.$2.$3-$4');
            } else {
                return cpf; // Retorna o CPF sem formatação caso não esteja no formato padrão
            }
        }
        
        // Chama a função formatarCPF quando o documento HTML for carregado para formatar o CPF inicialmente
        window.onload = function() {
            var cpfInput = document.querySelector('input[name="cpf"]');
            cpfInput.addEventListener('keyup', function() {
                this.value = formatarCPF(this.value);
            });
        };
    </script>
</body>
</html>




<?php /**PATH C:\laragon\www\formularios\resources\views/cadastro.blade.php ENDPATH**/ ?>