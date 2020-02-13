<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
        </h4>
    </div><!-- END column -->

    <div class="col-md-12">
        <form action="<?php echo base_url("team/update/$item->id"); ?>" method="post" enctype="multipart/form-data">
            <div class="widget">
                <div class="m-b-lg nav-tabs-horizontal">
                    <!-- tabs list -->
                    <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#tab-1" aria-controls="tab-3" role="tab" data-toggle="tab">Organizasyon Şeması</a></li>
                        <li role="presentation"><a href="#tab-2" aria-controls="tab-1" role="tab" data-toggle="tab">Akademik Koordinatörlerimiz</a></li>
                        <li role="presentation"><a href="#tab-3" aria-controls="tab-1" role="tab" data-toggle="tab">Öğrenci Koordinatörlerimiz</a></li>
                    </ul><!-- .nav-tabs -->

                    <!-- Tab panes -->
                    <div class="tab-content p-md">

                    <?php $this->load->view("$viewFolder/$subViewFolder/tabs/organization_chart"); ?>

                    <?php $this->load->view("$viewFolder/$subViewFolder/tabs/academy_coordinators"); ?>

                    <?php $this->load->view("$viewFolder/$subViewFolder/tabs/student_coordinators"); ?>

                    </div><!-- .tab-content  -->
                </div><!-- .nav-tabs-horizontal -->
            </div><!-- .widget -->

            <div class="widget">
                <div class="widget-body">
                    <button type="submit" class="btn btn-primary btn-md">Güncelle</button>
                </div>
            </div>

        </form>
    </div><!-- END column -->

</div>