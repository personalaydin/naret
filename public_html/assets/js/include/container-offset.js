let $container = $('.container').first();

export function containerOffset() {
    let bodyW = $('body').width();

    if ($container.length === 0) {
        return;
    }

    return (bodyW - $container.width()) / 2;
}