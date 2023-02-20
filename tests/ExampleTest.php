<?php

use Pinweb\Readit\Facades\Readit;

it('can get encrypt url', function () {
    $encrypt_data = readit('http://www.example.com/test.pdf','example','watermark');
    expect($encrypt_data)->toEqual('http://read.dev.pinweb.io/n/0HzuiA4kS3U9034nka5FGLkzHKnu5ZQGFX2khhA-mf45Sb60B4W31IUgbVMhBPElagfXl2VTPMjxp07ubqTUnnNxlVPkGcUATH1bLhVB_lY');
});

it('can decode url', function(){
    $decrypt_data = Readit::decrypt('0HzuiA4kS3U9034nka5FGLkzHKnu5ZQGFX2khhA-mf45Sb60B4W31IUgbVMhBPElagfXl2VTPMjxp07ubqTUnnNxlVPkGcUATH1bLhVB_lY', true);
    expect($decrypt_data)->toEqual([
        "doc"=> "http://www.example.com/test.pdf",
        "u"=> "watermark",
        "t"=> "example"
    ]);
});