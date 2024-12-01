<div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Produk</h6>
            </div>
            <div class="col-11 text-end">
                              <a href=<? base_url('') ?> class="btn btn-primary btn-xm text-end mt-n5 me-n6">Tambah</a>
                           </div>
            <div class="card-body px-4 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center justify-content-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">id</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">nama</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Deskripsi</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Harga</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Stok</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Kategori</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Foto</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no = 1; 
                    foreach ($produk as $key => $value) { ?>
                    <tr>
                      <td>
                        <span class="text-xs font-weight-bold text-center"><?= $no++ ?></span>
                    </td>
                      <td>
                      <span class="text-xs font-weight-bold"><?= $value['name'] ?></span>
                      </td>
                      <td>
                        <span class="text-xs font-weight-bold"><?= $value['description'] ?></span>
                      </td>
                      <td>
                        <span class="text-xs font-weight-bold">Rp<?= $value['price'] ?></span>
                      </td>
                      <td>
                        <span class="text-xs font-weight-bold"><?= $value['stock'] ?></span>
                      </td>
                      <td>
                        <span class="text-xs font-weight-bold"><?= $value['category_id'] ?></span>
                      </td>
                      <td>
                        <span class="text-xs font-weight-bold"><?= $value['image_path'] ?></span>
                      </td>
                      <td>
                        <span class="text-xs font-weight-bold"><?= $value['status'] ?></span>
                      </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>