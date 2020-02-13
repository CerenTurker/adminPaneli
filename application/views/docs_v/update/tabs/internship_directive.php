<div role="tabpanel" class="tab-pane fade" id="tab-3">
    <div class="row">
        <div class="form-group col-md-12">
            <label>Staj Yönergesi</label>
            <textarea name="directive" class="m-0" data-plugin="summernote" data-options="{height: 250}">
            <?php echo isset($form_error) ? set_value("directive") : $item->internship_directive; ?>
            </textarea>
        </div>
    </div>
</div><!-- .tab-pane  -->