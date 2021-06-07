@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
    'name' => 'title',
    'label' => 'Title',
    'maxlength' => 200
    ])
    @formField('input', [
    'name' => 'subtitle',
    'label' => 'Subtitle Callout',
    'maxlength' => 200
    ])
    @formField('tags', [
    'label' => 'tags',
    ])
    @formField('input', [
    'name' => 'Authors',
    'label' => 'News Author',
    'note' => 'First name and last initial',
    'maxlength' => 200
    ])

    @formField('wysiwyg', [
    'name' => 'Lead',
    'label' => 'News Lead',
    'toolbarOptions' => [ [ 'header' => [1, 2, false] ],
    'clean', 'bold', 'link', 'italic', 'list-ordered', 'list-unordered',
    [ 'indent' => '-1'], [ 'indent' => '+1' ] ],
    'editSource' => true,
    ])
    @formField('wysiwyg', [
    'name' => 'body',
    'label' => 'News Body',
    'toolbarOptions' => [ [ 'header' => [1, 2, false] ],
    'clean', 'bold', 'link', 'italic', 'list-ordered', 'list-unordered',
    [ 'indent' => '-1'], [ 'indent' => '+1' ] ],
    'editSource' => true,
    ])


    @formField('medias', [
    'name' => 'cover',
    'label' => 'News Cover',
    ])

@stop
