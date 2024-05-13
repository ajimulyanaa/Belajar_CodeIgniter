<?=$this->extend('templateLayout/template');?>

<?=$this->section('content');?>
<div class="contaainer">
    <div class="row">
        <div class="col">
            <h1 class="mt-2 text-center">Daftar Komik</h1>
            <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Sampul</th>
      <th scope="col">Judul</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><img src="/images/Narutos.jpg" alt="" class="sampul"></td>
      <td>Narto</td>
      <td>
        <a href="" class="btn btn-success">Detail</a>
      </td>
    </tr>
  </tbody>
</table>
        </div>
    </div>
</div>
<?=$this->endSection();?>