<div role="tabpanel" class="tab-pane fade" id="tab-5">
    <div class="row">
        <div class="form-group col-md-12">
            <label>Mülakat Kılavuzu</label>
            <textarea name="guide" class="m-0" data-plugin="summernote" data-options="{height: 250}">
            <?php echo isset($form_error) ? set_value("guide") : $item->interview_guide; ?>
            </textarea>
        </div>
    </div>
</div><!-- .tab-pane  -->