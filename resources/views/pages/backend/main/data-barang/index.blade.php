@extends('layouts.pages.index', ['page' => 'index'])
@push('title', 'Data Barang')

@push('content-head')
<th> Supplier </th>
<th> Jenis </th>
<th> Merk </th>
<th> Name </th>
<th> Quantity </th>
@endpush

@push('content-body')
{ data: 'id_supplier' },
{ data: 'id_jenis' },
{ data: 'id_merk' },
{ data: 'name' },
{ data: 'quantity' },
@endpush
