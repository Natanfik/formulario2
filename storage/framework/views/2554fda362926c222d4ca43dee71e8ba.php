
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <style>

        body {
            background-image: url("https://img.freepik.com/vetores-gratis/fundo-de-solsticio-de-inverno-em-aquarela_23-2149177804.jpg");
            background-repeat:no-repeat;
            background-size: 100%;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .conteiner {
            background-color: rgba(255, 255, 255, 0.8);
            width: 600px;
            max-width: 600px;
            border: none;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
            border-radius: 5px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 15px;
            text-align: center; /* Centraliza todos os elementos */
        }
        h2 {
            color: #333333;
        }
        a {
            margin-right:100px;
            text-decoration: none;
            color: #333333;

        }
        a:hover {
            text-decoration: underline;
        }

        .nomes{
            font-weight:700;
            margin-left:3px;
            width:20%;
            font:;
            text-decoration: none;
            color: #333333;
            float:left;
        }

        li {
            background-color: rgba(255, 255, 255, 0.6);
            list-style-type: none;
            margin-bottom: 10px;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
        }
        form {
            display: inline;
        }
        .novo_cliente {
            margin-right:220px;
            margin-bottom:15px;
            padding: 10px 10px;
            background-color: #24861a;
            color: #ffffff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .novo_cliente:hover {
            background-color: #226a19;
        }
        .apagar {
            margin-bottom:15px;
            padding: 5px 10px;
            background-color: #ff6347;
            color: #ffffff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            float:right;
        }
        .apagar:hover {
            background-color: #d23e30;
        }

        .edit{
            margin-right:8px;
            margin-bottom:15px;
            padding: 5px 10px;
            background-color: #005eff;
            color: #ffffff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            float:right;
        }

        .edit:hover {
            background-color: #0044d0;
        }

        .pesquisar input{
            float: right;
            padding:8px ;
            border: 1px solid #808080;
            border-radius: 8px;
            background-color: rgba(255, 255, 255, 0.7);
        }

        .pesquisar button{
            cursor:pointer;
            margin-left:8px;
            float: right;
            padding:8px ;
            border: none;
            border-radius: 8px;
        }



    </style>
</head>
<body>
    <div class="conteiner">
        <h2>Lista de clientes: </h2>
        <form action="<?php echo e(route('cliente.create')); ?>" method="GET">
            <input class="novo_cliente" type="submit" value="Novo Cliente">
        </form>
        <form class="pesquisar" action="<?php echo e(route('cliente.index')); ?>" method="GET">
            <button type="submit">Pesquisar</button>
            <input type="text" name="search" placeholder="Pesquisar...">
        </form>

            <?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <a class="nomes"><?php echo e($c['nome']); ?></a>
                    <a href="<?php echo e(route('cliente.show', $c['id'] )); ?>"> Info</a>
                    <form action="<?php echo e(route('cliente.destroy', $c['id'] )); ?>" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir este cliente?');">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <input class="apagar" type="submit" value="Apagar">
                    </form>
                    <form  action="<?php echo e(route('cliente.edit', $c['id'] )); ?>" method="GET">
                        <input class="edit" type="submit" value="Editar">
                    </form>

                </li> 
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ol>
    </div>
</body>
</html>

<?php /**PATH C:\laragon\www\formularios\resources\views/index.blade.php ENDPATH**/ ?>