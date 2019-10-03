<?php

//if accessed directly exit
if(!defined('ABSPATH')) exit;

class PitchQodeSkin extends PitchQodeSkinAbstract {
    /**
     * Skin constructor. Hooks to pitch_qode_action_admin_scripts_init and pitch_qode_enqueue_admin_styles
     */
	public function __construct() {
		$this->skinName = 'select';

        //hook to admin register scripts
        add_action('pitch_qode_action_admin_scripts_init', array($this, 'registerStyles'));
        add_action('pitch_qode_action_admin_scripts_init', array($this, 'registerScripts'));

        //hook to admin enqueue scripts
        add_action('pitch_qode_action_enqueue_admin_styles', array($this, 'enqueueStyles'));
        add_action('pitch_qode_action_enqueue_admin_scripts', array($this, 'enqueueScripts'));

        add_action('pitch_qode_action_enqueue_meta_box_styles', array($this, 'enqueueStyles'));
        add_action('pitch_qode_action_enqueue_meta_box_scripts', array($this, 'enqueueScripts'));

		add_action( 'admin_enqueue_scripts', array( $this, 'setShortcodeJSParams' ), 5 ); // 5 is set to be same permission as Gutenberg plugin have

		$this->setIcons();
		$this->setMenuItemPosition();
	}

    /**
     * Method that registers skin scripts
     */
    public function registerScripts() {
        $this->scripts['bootstrap.min'] = 'assets/js/bootstrap.min.js';
        $this->scripts['qodef-ui-admin'] = 'assets/js/qodef-ui/qodef-ui.js';
        $this->scripts['qodef-bootstrap-select'] = 'assets/js/qodef-ui/qodef-bootstrap-select.min.js';

        foreach ($this->scripts as $scriptHandle => $scriptPath) {
            pitch_qode_register_skin_script($scriptHandle, $scriptPath);
        }
    }

    /**
     * Method that registers skin styles
     */
    public function registerStyles() {
        $this->styles['qodef-bootstrap'] = 'assets/css/qodef-bootstrap.css';
        $this->styles['qodef-page-admin'] = 'assets/css/qodef-page.css';
        $this->styles['qodef-options-admin'] = 'assets/css/qodef-options.css';
        $this->styles['qodef-meta-boxes-admin'] = 'assets/css/qodef-meta-boxes.css';
        $this->styles['qodef-ui-admin'] = 'assets/css/qodef-ui/qodef-ui.css';
        $this->styles['qodef-forms-admin'] = 'assets/css/qodef-forms.css';
        $this->styles['qodef-import'] = 'assets/css/qodef-import.css';
        $this->styles['font-awesome-admin'] = 'assets/css/font-awesome/css/font-awesome.min.css';

        foreach ($this->styles as $styleHandle => $stylePath) {
            pitch_qode_register_skin_style($styleHandle, $stylePath);
        }

    }

	/**
	 * Method that set menu icons
	 */

	public function setIcons() {
		$this->icons = array(
			'slider' => $this->getSkinURI().'/assets/img/admin-logo-icon.png',
			'carousel' => $this->getSkinURI().'/assets/img/admin-logo-icon.png',
			'testimonial' => $this->getSkinURI().'/assets/img/admin-logo-icon.png',
			'portfolio' => $this->getSkinURI().'/assets/img/admin-logo-icon.png',
			'options' => 'dashicons-admin-generic'
		);
	}

	/**
	 * Method that set menu item position
	 */

	public function setMenuItemPosition() {
		$this->itemPosition = array(
			'slider' => 4,
			'carousel' => 4,
			'testimonial' => 4,
			'portfolio' => 4,
			'options' => 1000
		);
	}

    /**
     * Method that renders options page
     *
     * @see SelectSkin::getHeader()
     * @see SelectSkin::getPageNav()
     * @see SelectSkin::getPageContent()
     */
	public function renderOptions() {
        global $pitch_qode_framework;
        $tab    = pitch_qode_get_admin_tab();
        $active_page = $pitch_qode_framework->qodeOptions->getAdminPageFromSlug($tab);
        if ($active_page == null) return;
    ?>
        <div class="qodef-options-page qodef-page">
            <?php $this->getHeader(); ?>
            <div class="qodef-page-content-wrapper">
                <div class="qodef-page-content">
                    <div class="qodef-page-navigation qodef-tabs-wrapper vertical left clearfix">
                        <?php $this->getPageNav($tab); ?>
                        <?php $this->getPageContent($active_page); ?>
                    </div>
                </div>
            </div>
        </div>
	<?php }

    /**
     * Method that renders header of options page.
     * @param bool $show_save_btn whether to show save button. Should be hidden on import page
     *
     * @see PitchQodeSkinAbstract::loadTemplatePart()
     */
    public function getHeader($show_save_btn = true) {
        $this->loadTemplatePart('header', array('show_save_btn' => $show_save_btn));
    }

    /**
     * Method that loads page navigation
     * @param string $tab current tab
     * @param bool $is_import_page if is import page highlighted that tab
     *
     * @see PitchQodeSkinAbstract::loadTemplatePart()
     */
    public function getPageNav($tab, $is_import_page = false) {
        $this->loadTemplatePart('navigation', array(
            'tab' => $tab,
            'is_import_page' => $is_import_page
        ));
    }

    /**
     * Method that loads current page content
     * @param QodePitchAdminPage $page current page to load
     *
     * @see PitchQodeSkinAbstract::loadTemplatePart()
     */
    public function getPageContent($page) {
        $this->loadTemplatePart('content', array('page' => $page));
    }

    /**
     * Method that loads content for import page
     */
    public function getImportContent() {
        $this->loadTemplatePart('content-import');
    }

    /**
     * Method that loads anchors and save button template part
     * @param QodePitchAdminPage $page current page to load
     *
     * @see PitchQodeSkinAbstract::loadTemplatePart()
     */
    public function getAchorsAndSave($page) {
        $this->loadTemplatePart('anchors-save', array('page' => $page));

    }

    /**
     * Method that renders import page
     *
     * @see SelectSkin::getHeader()
     * * @see SelectSkin::getPageNav()
     * * @see SelectSkin::getImportContent()
     */
    public function renderImport() { ?>
        <div class="qodef-options-page qodef-page">
            <?php $this->getHeader(false); ?>
            <div class="qodef-page-content-wrapper">
                <div class="qodef-page-content">
                    <div class="qodef-page-navigation qodef-tabs-wrapper vertical left clearfix">
                        <?php $this->getPageNav('tabimport', true); ?>
                        <?php $this->getImportContent(); ?>
                    </div>
                </div>
            </div>
        </div>
    <?php }
}
?>