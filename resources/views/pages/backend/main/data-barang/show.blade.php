@extends('layouts.pages.show', ['page' => 'show'])
@push('title', 'Data Barang')

@push('content-body')
<div class="table-responsive">
  <table width="100%" class="table table-stiped table-bordered">
    <tr>
      <td class="align-middle font-weight-bold"> Supplier </td>
      <td class="align-middle"> {{ $data->data_suppliers->name }} </td>
    </tr>
    <tr>
      <td class="align-middle font-weight-bold"> Jenis Barang </td>
      <td class="align-middle"> {{ $data->jenis_barangs->name }} </td>
    </tr>
    <tr>
      <td class="align-middle font-weight-bold"> Merk Barang </td>
      <td class="align-middle"> {{ $data->merk_barangs->name }} </td>
    </tr>
    <tr>
      <td class="align-middle font-weight-bold"> Name </td>
      <td class="align-middle"> {{ $data->name }} </td>
    </tr>
    <tr>
      <td class="align-middle font-weight-bold"> Quantity </td>
      <td class="align-middle"> {{ $data->quantity }} </td>
    </tr>
    <tr>
      <td class="align-middle font-weight-bold"> Description </td>
      <td class="align-middle"> {{ $data->description }} </td>
    </tr>
    @include('includes.datatable.page-show.main')
  </table>
</div>
<hr>
@endpush
