<!-- resources/views/editar.blade.php -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>
    <style>

        body{
            background-image: url("https://img.freepik.com/vetores-gratis/fundo-de-solsticio-de-inverno-em-aquarela_23-2149177804.jpg");
            background-repeat:no-repeat;
            background-size: 100%;

        }

        .container {
                background-color: rgba(255, 255, 255, 0.7);
                width: 400px;
                align-items: center;
                margin: 0 auto; 
                max-width: 600px;
                border:none;
                border-radius: 4px;
                box-shadow: 20px 20px 34px #000800;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
            }
            
            
        .container input,
        .container textarea,
        .container button {
            background-color: rgba(255, 255, 255, 0.4);
            display: block;
            margin: 10px 0;
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 12px;
            font-size: 16px;
        }
        .container h2 {
            right:100px;
            text-align: center;
        }
        .container {
            background-color: rgba(255, 255, 255, 0.4);
            text-align: center;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
            width: 300px;
        }
        
        .login-form {
            display: flex;
            flex-direction: column;
        }
        

        .login-form input {
            width:93%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #c2bfbf;
            border-radius: 12px;
            background-color: rgba(255, 255, 255, 0.6);
        }

        .login-form input:hover {
            border: 1px solid #8ca777
        }
        
        .login-form button {
            margin-top:15px;
            padding: 10px;
            background-color: #5e7e46;
            color: white;
            border: none;
            border-radius: 12px;
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
            border-radius: 12px;
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
    <form action="<?php echo e(route('cliente.update', $cliente->id)); ?>" method="POST">
        <div class='container'>
            <h1>Editar Cliente</h1>
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="login-form">
                    <input type="text" name="nome" id="nome" value="<?php echo e($cliente->nome); ?>" placeholder="Nome Completo">
                    <input type="text" name="email" id="email" value="<?php echo e($cliente->email); ?>" placeholder="E-mail">
                    <input type="text" name="cpf" id="cpf" value="<?php echo e($cliente->cpf); ?>" placeholder="CPF">
                    <button type="submit" value="Enviar">Salvar Alteração</button>
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
<?php /**PATH C:\laragon\www\formularios\resources\views/editar.blade.php ENDPATH**/ ?>