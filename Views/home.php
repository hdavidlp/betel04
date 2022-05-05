
<?php include("Views/layout/header.php");?>


<body>
    <section id="<?php echo $data['page_id'] ?>">
        <h1><?php  echo $data['page_title']?></h1>
        <p><?php  echo $data['page_content']?></p>
        <?php print_r($data); ?>
    </section>
</body>


<?php include("Views/layout/footer.php");?>
