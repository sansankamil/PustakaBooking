<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 justify-content-x">
        <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Member Sejak</th>
                        <th scope="col">Image</th>
                        <th scope="col">Role</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $a = 1;
                    foreach ($anggota as $member) { ?>
                        <tr>
                            <th scope="row"><?= $a++; ?></th>
                            <td><?= $member['nama']; ?></td>
                            <td><?= $member['email']; ?></td>
                            <td><?= $member['tanggal_input']; ?></td>
                            <td>
                                <picture>
                                    <source srcset="" type="image/svg+xml">
                                    <img src="<?= base_url('assets/img/profile/') . $member['image']; ?>"
                                        class="img-fluid img-thumbnail" alt="..." width="100" height="120">
                                </picture>
                            </td>
                            <td>
                                <?php if($member['role_id']==1){
                                    echo 'Admin';
                                }else{
                                    echo 'Member';
                                } 
                                ?>
                            </td>
                            
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->