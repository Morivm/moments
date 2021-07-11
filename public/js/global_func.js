function pageHighlighter(li_parent, li_child) {
    if (!li_parent == null || !li_parent=='') {
        $(`#${li_parent}`).addClass('has-sub menu-collapsed-open open');
    }
    if (!li_child == null || !li_child=='') {
        $(`#${li_child}`).addClass('active');
    }
}
