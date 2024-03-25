
<?=$this->extend('templateLayout/template');?>
<?=$this->section('content');?>
    <h1>Contact Me</h1>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae ad sed dicta officiis! Assumenda in perspiciatis ipsa, voluptatem minima nam?</p>
    <?php foreach($alamat as $a) : ?>
    <ul>
        <li><?=$a['tipe'];?></li>
        <li><?=$a['alamat'];?></li>
    </ul>
    <?php endforeach;  ?>
<?=$this->endSection();?>