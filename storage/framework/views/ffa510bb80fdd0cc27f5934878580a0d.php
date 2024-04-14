<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <style>
    
        body{
            background-image: url("https://img.freepik.com/vetores-gratis/fundo-de-solsticio-de-inverno-em-aquarela_23-2149177804.jpg");
            background-repeat:no-repeat;
            background-size: 100%;
        }

        .container{
            background-color: rgba(255, 255, 255, 0.8);
            width: 600px;
            max-width: 400px;
            border: 1px solid #cce7d080;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 15px;
            text-align: center; /* Centraliza todos os elementos */
        }

        .info{
            margin-bottom:15px;
            background-color: rgba(255, 255, 255, 0.4);
            padding: 30px 50px;
            border: none;
            border-radius:8px;
            width: 300px;
            }
        
        .voltar{
            margin-bottom:15px;
            padding: 10px 25px;
            background-color: #24861a;
            color: #ffffff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .voltar {
            background-color: #226a19;
        }

    </style>
<body>
<div class="container">
    <h3>informações principais</h3>

    <div class="info">
        <p><strong>Nome:</strong>  <?php echo e($cliente['nome']); ?></p>
        <p><strong>E-mail:</strong>  <?php echo e($cliente['email']); ?></p>
        <p><strong>CPF:</strong>  <?php echo e($cliente['cpf']); ?></p>
    </div>

    <form action="<?php echo e(route('cliente.index')); ?>" method="GET">
        <button class="voltar" type="submit">Voltar</button>
    </form>
</div>
</body>
</html>




<?php /**PATH C:\laragon\www\formularios\resources\views/mostrar.blade.php ENDPATH**/ ?>