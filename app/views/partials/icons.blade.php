<?php

$raw = json_decode(file_get_contents(app_path().'/icons.json'), true);

$icons = array();

foreach($raw as $icon) {
    if (in_array('Web Application Icons', $icon['categories'])) {
        $icons['Web Application Icons'][] = array($icon['name'], $icon['id']);
    }
    if (in_array('Form Control Icons', $icon['categories'])) {
        $icons['Form Control Icons'][] = array($icon['name'], $icon['id']);
    }
    if (in_array('Currency Icons', $icon['categories'])) {
        $icons['Currency Icons'][] = array($icon['name'], $icon['id']);
    }
    if (in_array('Text Editor Icons', $icon['categories'])) {
        $icons['Text Editor Icons'][] = array($icon['name'], $icon['id']);
    }
    if (in_array('Directional Icons', $icon['categories'])) {
        $icons['Directional Icons'][] = array($icon['name'], $icon['id']);
    }
    if (in_array('Video Player Icons', $icon['categories'])) {
        $icons['Video Player Icons'][] = array($icon['name'], $icon['id']);
    }
    if (in_array('Brand Icons', $icon['categories'])) {
        $icons['Brand Icons'][] = array($icon['name'], $icon['id']);
    }
    if (in_array('Medical Icons', $icon['categories'])) {
        $icons['Medical Icons'][] = array($icon['name'], $icon['id']);
    }
}

?>

<select class="selectpicker">
    @foreach($icons as $key => $list)
        <optgroup label="{{ $key }}">
        @foreach($list as $icon)
            <option><i class="fa {{ $icon['id'] }} fa-fw"></i> {{ $icon['name'] }}</option>
        @endforeach
    @endforeach
</select>
