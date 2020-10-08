$(function() {
    'use strict';

    function bootstrapAjaxModal() {
        $('a[data-toggle="modal"]').on('click', function () {
            let $this = $(this);
            $($this.attr('data-target')).find('.modal-body').load($this.attr('data-remote'));
        });
    }

    bootstrapAjaxModal();
});