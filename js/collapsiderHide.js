var $myGroup = $('#mojaGrupa');
$myGroup.on('show.bs.collapse','.collapse', function() {
    $myGroup.find('.collapse.in').collapse('hide');
});
