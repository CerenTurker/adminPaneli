<div role="tabpanel" class="tab-pane fade" id="tab-1">
    <div class="row">
        <div class="form-group col-md-12">
            <label>CV örnekleri</label>
            <textarea name="samples" class="m-0" data-plugin="summernote" data-options="{height: 250}">
            <?php echo isset($form_error) ? set_value("samples") : $item->cv_samples; ?>
            </textarea>
        </div>
    </div>
</div><!-- .tab-pane  -->