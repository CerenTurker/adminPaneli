<div role="tabpanel" class="tab-pane fade" id="tab-1">
    <div class="row">
        <div class="form-group col-md-12">
            <label>Organizasyon Şeması</label>
            <textarea name="organization" class="m-0" data-plugin="summernote" data-options="{height: 250}">
            <?php echo isset($form_error) ? set_value("organization") : $item->organization_chart; ?>
            </textarea>
        </div>
    </div>
</div><!-- .tab-pane  -->