<div class="qodef-tabs-content">
    <div class="tab-content">
        <div class="tab-pane fade in active" id="import">
            <div class="qodef-tab-content">
                <h2 class="qodef-page-title"><?php esc_html_e( 'Import', 'pitch' ); ?></h2>
                <form method="post" class="qode_ajax_form qodef-import-page-holder">
                    <div class="qodef-page-form">
                        <div class="qodef-page-form-section-holder">
                            <h3 class="qodef-page-section-title"><?php esc_html_e( 'Import Demo Content', 'pitch' ); ?></h3>
                            <div class="qodef-page-form-section">
                                <div class="qodef-field-desc">
                                    <h4><?php esc_html_e( 'Import', 'pitch' ); ?></h4>

                                    <p><?php esc_html_e( 'Choose demo content you want to import', 'pitch' ); ?></p>
                                </div>
                                <!-- close div.qodef-field-desc -->

                                <div class="qodef-section-content">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <select name="import_example" id="import_example" class="form-control qodef-form-element dependence">
                                                    <option value="pitch"><?php esc_html_e( 'Pitch', 'pitch' ); ?></option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- close div.qodef-section-content -->

                            </div>

                            <div class="qodef-page-form-section">


                                <div class="qodef-field-desc">
                                    <h4><?php esc_html_e( 'Import Type', 'pitch' ); ?></h4>

                                    <p><?php esc_html_e( 'Enabling this option will switch to a Side Position (default is Top Position)', 'pitch' ); ?></p>
                                </div>
                                <!-- close div.qodef-field-desc -->



                                <div class="qodef-section-content">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <select name="import_option" id="import_option" class="form-control qodef-form-element">
                                                    <option value=""><?php esc_html_e( 'Please Select', 'pitch' ); ?></option>
                                                    <option value="complete_content"><?php esc_html_e( 'All', 'pitch' ); ?></option>
                                                    <option value="content"><?php esc_html_e( 'Content', 'pitch' ); ?></option>
                                                    <option value="widgets"><?php esc_html_e( 'Widgets', 'pitch' ); ?></option>
                                                    <option value="options"><?php esc_html_e( 'Options', 'pitch' ); ?></option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- close div.qodef-section-content -->

                            </div>
                            <div class="qodef-page-form-section">


                                <div class="qodef-field-desc">
                                    <h4><?php esc_html_e( 'Import attachments', 'pitch' ); ?></h4>

                                    <p>Do you want to import media files?</p>
                                </div>
                                <!-- close div.qodef-field-desc -->
                                <div class="qodef-section-content">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <p class="field switch">
                                                    <label class="cb-enable dependence"><span><?php esc_html_e( 'Yes', 'pitch' ); ?></span></label>
                                                    <label class="cb-disable selected dependence"><span><?php esc_html_e( 'No', 'pitch' ); ?></span></label>
                                                    <input type="checkbox" id="import_attachments" class="checkbox" name="import_attachments" value="1">
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- close div.qodef-section-content -->
                            </div>
                            <div class="qodef-page-form-section">


                                <div class="qodef-field-desc">
                                    <input type="submit" class="btn btn-primary btn-sm " value="<?php esc_attr_e( 'Import', 'pitch' ); ?>" name="import" id="import_demo_data" />
                                </div>
                                <!-- close div.qodef-field-desc -->
                                <div class="qodef-section-content">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="import_load"><span><?php esc_html_e('The import process may take some time. Please be patient.', 'pitch') ?> </span><br />
                                                    <div class="qode-progress-bar-wrapper html5-progress-bar">
                                                        <div class="progress-bar-wrapper">
                                                            <progress id="progressbar" value="0" max="100"></progress>
                                                        </div>
                                                        <div class="progress-value"><?php esc_html_e( '0%', 'pitch' ); ?></div>
                                                        <div class="progress-bar-message">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- close div.qodef-section-content -->
                            </div>
                            <div class="qodef-page-form-section qodef-import-button-wrapper">

                                <div class="alert alert-warning">
                                    <strong><?php esc_html_e('Important notes:', 'pitch') ?></strong>
                                    <ul>
                                        <li><?php esc_html_e('Please note that import process will take time needed to download all attachments from demo web site.', 'pitch'); ?></li>
                                        <li> <?php esc_html_e('If you plan to use shop, please install WooCommerce before you run import.', 'pitch')?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>

            </div><!-- close qodef-tab-content -->
        </div>
    </div>
</div> <!-- close div.qodef-tabs-content -->

<script type="text/javascript">
    (function($) {
        $(document).ready(function() {
            $(document).on('click', '#import_demo_data', function(e) {
                e.preventDefault();
                if (confirm('Are you sure, you want to import Demo Data now?')) {
                    $('.import_load').css('display','block');
                    var progressbar = $('#progressbar');
                    var import_opt = $( "#import_option" ).val();
                    var import_expl = $( "#import_example" ).val();
                    var p = 0;
                    if(import_opt === 'content'){
                        for(var i=1;i<10;i++){
                            var str;
                            if (i < 10) str = 'pitch_content_0'+i+'.xml';
                            else str = 'pitch_content_'+i+'.xml';
                            jQuery.ajax({
                                type: 'POST',
                                url: ajaxurl,
                                data: {
                                    action: 'pitch_core_action_data_import',
                                    xml: str,
                                    example: import_expl,
                                    import_attachments: ($("#import_attachments").is(':checked') ? 1 : 0)
                                },
                                success: function(data, textStatus, XMLHttpRequest){
                                    p+= 10;
                                    $('.progress-value').html((p) + '%');
                                    progressbar.val(p);
                                    if (p === 90) {
                                        str = 'pitch_content_10.xml';
                                        jQuery.ajax({
                                            type: 'POST',
                                            url: ajaxurl,
                                            data: {
                                                action: 'pitch_core_action_data_import',
                                                xml: str,
                                                example: import_expl,
                                                import_attachments: ($("#import_attachments").is(':checked') ? 1 : 0)
                                            },
                                            success: function(data, textStatus, XMLHttpRequest){
                                                p+= 10;
                                                $('.progress-value').html((p) + '%');
                                                progressbar.val(p);
                                                $('.progress-bar-message').html('<div class="alert alert-success"><strong><?php esc_html_e( 'Import is completed', 'pitch' ); ?></strong></div>');
                                            }
                                        });
                                    }
                                }
                            });
                        }
                    } else if(import_opt === 'widgets') {
                        jQuery.ajax({
                            type: 'POST',
                            url: ajaxurl,
                            data: {
                                action: 'pitch_core_action_widgets_import',
                                example: import_expl
                            },
                            success: function(data, textStatus, XMLHttpRequest){
                                $('.progress-value').html((100) + '%');
                                progressbar.val(100);
                            }
                        });
                        $('.progress-bar-message').html('<div class="alert alert-success"><strong><?php esc_html_e( 'Import is completed', 'pitch' ); ?></strong></div>');
                    } else if(import_opt == 'options'){
                        jQuery.ajax({
                            type: 'POST',
                            url: ajaxurl,
                            data: {
                                action: 'pitch_core_action_options_import',
                                example: import_expl
                            },
                            success: function(data, textStatus, XMLHttpRequest){
                                $('.progress-value').html((100) + '%');
                                progressbar.val(100);
                            }
                        });
                        $('.progress-bar-message').html('<div class="alert alert-success"><strong><?php esc_html_e( 'Import is completed', 'pitch' ); ?></strong></div>');
                    }else if(import_opt === 'complete_content'){
                        for(var i=1;i<10;i++){
                            var str;
                            if (i < 10) str = 'pitch_content_0'+i+'.xml';
                            else str = 'pitch_content_'+i+'.xml';
                            jQuery.ajax({
                                type: 'POST',
                                url: ajaxurl,
                                data: {
                                    action: 'pitch_core_action_data_import',
                                    xml: str,
                                    example: import_expl,
                                    import_attachments: ($("#import_attachments").is(':checked') ? 1 : 0)
                                },
                                success: function(data, textStatus, XMLHttpRequest){
                                    p+= 10;
                                    $('.progress-value').html((p) + '%');
                                    progressbar.val(p);
                                    if (p === 90) {
                                        str = 'pitch_content_10.xml';
                                        jQuery.ajax({
                                            type: 'POST',
                                            url: ajaxurl,
                                            data: {
                                                action: 'pitch_core_action_data_import',
                                                xml: str,
                                                example: import_expl,
                                                import_attachments: ($("#import_attachments").is(':checked') ? 1 : 0)
                                            },
                                            success: function(data, textStatus, XMLHttpRequest){
                                                jQuery.ajax({
                                                    type: 'POST',
                                                    url: ajaxurl,
                                                    data: {
                                                        action: 'pitch_core_action_other_import',
                                                        example: import_expl
                                                    },
                                                    success: function(data, textStatus, XMLHttpRequest){
                                                        //alert(data);
                                                        $('.progress-value').html((100) + '%');
                                                        progressbar.val(100);
                                                        $('.progress-bar-message').html('<div class="alert alert-success"><?php esc_html_e( 'Import is completed.', 'pitch' ); ?></div>');
                                                    }
                                                });
                                            }
                                        });
                                    }
                                }
                            });
                        }
                    }
                }
                return false;
            });
        });
    })(jQuery);

</script>