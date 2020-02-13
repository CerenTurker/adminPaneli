<div role="tabpanel" class="tab-pane fade" id="tab-6">
    <div class="row">
        <div class="form-group col-md-12">
            <label>Sık Sorulan Sorular</label>
            <textarea name="asked" class="m-0" data-plugin="summernote" data-options="{height: 250}">
            <?php echo isset($form_error) ? set_value("asked") : $item->asked_questions; ?>
            </textarea>
        </div>
    </div>
</div><!-- .tab-pane  -->