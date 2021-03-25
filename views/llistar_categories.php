<ul id="listproducts">
<?php foreach ($categories as $categoria): ?>
    <li>
        <section class="categoria">
           
            <img src="<?php echo $categoria['imagencat']?>"/>
            <h3><?php echo $categoria['nombre'] ?> </h3>
    </li>
<?php endforeach; ?>
</ul>