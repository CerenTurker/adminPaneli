<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Danışmanlık Ekle
        </h4>
    </div><!-- END column -->


    <div class="col-md-12">
        <form action="<?php echo base_url("consultancy/save"); ?>" method="post" enctype="multipart/form-data">
            <div class="widget">
                <div class="m-b-lg nav-tabs-horizontal">
                    <!-- tabs list -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tab-1" aria-controls="tab-3" role="tab" data-toggle="tab">Mülakat Simülasyonu</a></li>
                        <li role="presentation"><a href="#tab-2" aria-controls="tab-1" role="tab" data-toggle="tab">Faydalı Kariyer Kaynakları</a></li>
                    </ul><!-- .nav-tabs -->

                    <!-- Tab panes -->

                    <div class="tab-content p-md">

                        <?php $this->load->view("$viewFolder/$subViewFolder/tabs/interview_simulation"); ?>

                        <?php $this->load->view("$viewFolder/$subViewFolder/tabs/resources_page"); ?>

                    </div><!-- .tab-content  -->
                </div><!-- .nav-tabs-horizontal -->
            </div><!-- .widget -->

            <div class="widget">
                <div class="widget-body">
                    <button type="submit" class="btn btn-primary btn-md">Kaydet</button>
                    <a href="<?php echo base_url("consultancy"); ?>" class="btn btn-md btn-danger">İptal</a>
                </div>
            </div>

        </form>
    </div><!-- END column -->
</div>