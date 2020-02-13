<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
        </h4>
    </div><!-- END column -->

    <div class="col-md-12">
        <form action="<?php echo base_url("docs/update/$item->id"); ?>" method="post" enctype="multipart/form-data">
            <div class="widget">
                <div class="m-b-lg nav-tabs-horizontal">
                    <!-- tabs list -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tab-1" aria-controls="tab-3" role="tab" data-toggle="tab">CV Örnekleri</a></li>
                        <li role="presentation"><a href="#tab-2" aria-controls="tab-1" role="tab" data-toggle="tab">CV Önyazı Örnekleri</a></li>
                        <li role="presentation"><a href="#tab-3" aria-controls="tab-1" role="tab" data-toggle="tab">Staj Yönergesi</a></li>
                        <li role="presentation"><a href="#tab-4" aria-controls="tab-1" role="tab" data-toggle="tab">Kısmi Zamanlı Çalışma</a></li>
                        <li role="presentation"><a href="#tab-5" aria-controls="tab-1" role="tab" data-toggle="tab">Mülakat Kılavuzu</a></li>
                        <li role="presentation"><a href="#tab-6" aria-controls="tab-1" role="tab" data-toggle="tab">Sık Sorulan Sorular</a></li>
                        
                    </ul><!-- .nav-tabs -->

                    <!-- Tab panes -->

                    <div class="tab-content p-md">

                        <?php $this->load->view("$viewFolder/$subViewFolder/tabs/cv_samples"); ?>

                        <?php $this->load->view("$viewFolder/$subViewFolder/tabs/cv_boot_samples"); ?>

                        <?php $this->load->view("$viewFolder/$subViewFolder/tabs/internship_directive"); ?>

                        <?php $this->load->view("$viewFolder/$subViewFolder/tabs/part_time_work"); ?>

                        <?php $this->load->view("$viewFolder/$subViewFolder/tabs/interview_guide"); ?>

                        <?php $this->load->view("$viewFolder/$subViewFolder/tabs/asked_questions"); ?>

                    </div><!-- .tab-content  -->
                </div><!-- .nav-tabs-horizontal -->
            </div><!-- .widget -->

            <div class="widget">
                <div class="widget-body">
                    <button type="submit" class="btn btn-primary btn-md">Güncelle</button>
                    <a href="<?php echo base_url("docs"); ?>" class="btn btn-md btn-danger">İptal</a>
                </div>
            </div>

        </form>
    </div><!-- END column -->

</div>