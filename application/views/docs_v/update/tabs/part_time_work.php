<div role="tabpanel" class="tab-pane fade" id="tab-4">
    <div class="row">
        <div class="form-group col-md-12">
            <label>Kısmi Zamanlı Çalışma</label>
            <textarea name="parttime" class="m-0" data-plugin="summernote" data-options="{height: 250}">
            <?php echo isset($form_error) ? set_value("parttime") : $item->part_time_work; ?>
            </textarea>
        </div>
    </div>
</div><!-- .tab-pane  -->