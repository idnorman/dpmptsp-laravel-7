"use strict";



$("#user").dataTable({
  "columnDefs": [
    { "sortable": false, "targets": [4] },
    { "width": "3%", "targets": [0] },
    { "width": "25%", "targets": [1] },
    { "width": "20%", "targets": [2] },
    { "width": "15%", "targets": [3] },
  ]
});

$("#kategori").dataTable({
  "columnDefs": [
    { "sortable": false, "targets": [3] },
    { "width": "3%", "targets": [0] },
    { "width": "15%", "targets": [1] },
  ]
});


$("#artikel").dataTable({
  "columnDefs": [
    { "sortable": false, "targets": [7] },
    { "width": "3%", "targets": [0] },
    { "width": "25%", "targets": [1] },
    { "width": "15%", "targets": [2] },
    { "width": "15%", "targets": [3] },
    { "width": "10%", "targets": [4] },
    { "width": "10%", "targets": [5] },
  ]
});

$("#perizinan").dataTable({
  "columnDefs": [
    { "sortable": false, "targets": [4] },
    { "width": "3%", "targets": [0] },
    { "width": "30%", "targets": [1] },
  ]
});

$("#menu").dataTable({
  "columnDefs": [
    { "sortable": false, "targets": [3] },
    
  ]
});