<ul>
<?php foreach ($productos as $producte): ?>
    <li>
        <section class="producto">
           
            <img src="<?php echo $producte['imagen']?>"/>
            <h3><?php echo $producte['nombre'] ?> </h3>
            <p><?php echo $producte['precio'] ?></p>
        </section>
    </li>
<?php endforeach; ?>
</ul>