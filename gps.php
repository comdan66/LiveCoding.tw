<?php
header('Content-Type: application/json; charset=utf-8');

$gpsPoints = [[25.05199344392906, 121.50857448577881], [25.05199344392906, 121.50971174240112], [25.05199344392906, 121.51044130325317]];
$gpsPoints = [[25.05199344392906, 121.50857448577881], [25.05199344392906, 121.50971174240112], [25.05199344392906, 121.51044130325317], [25.05199344392906, 121.51127815246582], [25.05197400490939, 121.51194334030151]];
$gpsPoints = [[25.05199344392906, 121.50857448577881], [25.05199344392906, 121.50971174240112], [25.05199344392906, 121.51044130325317], [25.05199344392906, 121.51127815246582], [25.05197400490939, 121.51194334030151], [25.051915687831826, 121.51278018951416], [25.0516629801752, 121.51346683502197]];
$gpsPoints = [[25.05199344392906, 121.50857448577881], [25.05199344392906, 121.50971174240112], [25.05199344392906, 121.51044130325317], [25.05199344392906, 121.51127815246582], [25.05197400490939, 121.51194334030151], [25.051915687831826, 121.51278018951416], [25.0516629801752, 121.51346683502197], [25.05156578478393, 121.51396036148071],[25.05049663039367, 121.5137243270874], [25.049894011991945, 121.51346683502197], [25.049427466678736, 121.51333808898926], [25.04913587495638, 121.51430368423462], [25.049058117046634, 121.51496887207031], [25.048922040585868, 121.51580572128296], [25.04880540349929, 121.51655673980713], [25.048280535236504, 121.51722192764282]];
$gpsPoints = [[25.05199344392906, 121.50857448577881], [25.05199344392906, 121.50971174240112], [25.05199344392906, 121.51044130325317], [25.05199344392906, 121.51127815246582], [25.05197400490939, 121.51194334030151], [25.051915687831826, 121.51278018951416], [25.0516629801752, 121.51346683502197], [25.05156578478393, 121.51396036148071],[25.05049663039367, 121.5137243270874], [25.049894011991945, 121.51346683502197], [25.049427466678736, 121.51333808898926], [25.04913587495638, 121.51430368423462], [25.049058117046634, 121.51496887207031], [25.048922040585868, 121.51580572128296], [25.04880540349929, 121.51655673980713], [25.048280535236504, 121.51722192764282], [25.048241656016536, 121.51923894882202], [25.048105578649565, 121.52026891708374], [25.048008380437853, 121.52099847793579]];
echo json_encode (array (
    'points' => $gpsPoints,
    'comment' => 'Hello'
  ));
