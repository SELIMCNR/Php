<?php foreach ($kurslar as $key => $kurs): ?>
         <?php   if($kurs ["onay"]): ?>

         <div class="card mb-3">
                    <div class="row">
                        <div class="col-4">
                        <img src="img/<?php echo $kurs["resim"]; ?>" alt="" class="img-fluid rounded-start">

                        </div>
                        <div class="col-8">
                            <div class="card-body">
                                <h5 class="card-title">
                                <a href="<?php echo urlDuzenle($kurs["baslik"]); ?>">
                                <?php echo $kurs["baslik"]; ?></h5>
                                </a>  
                            
                                <p class="card-text">
                                <?php echo kisaAciklama($kurs["aciklama"]); ?>
                                <?php   if($kurs ["begeniSayisi"]>0): ?>
                                <span class="badge rounded-pill text-bg-primary"><?php echo "Beğeni".$kurs["begeniSayisi"]; ?></span> 
                                <?php endif; ?>

                                <?php   if($kurs ["yorumSayisi"]>0): ?>
                            <span class="badge rounded-pill text-bg-primary"><?php echo "Yorum".$kurs["yorumSayisi"]; ?></span> 
                            <?php endif; ?>
                            </p>
                        </div>
                    </div>
                </div>
               

         
            </div>
            <?php endif; ?>
            <?php endforeach; ?>