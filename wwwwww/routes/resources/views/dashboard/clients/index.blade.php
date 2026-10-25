@extends('dashboard.layout.master')
@php
use Carbon\Carbon;
@endphp
@section('custom-style')
<style>
.active-icon {
    background-color: #28a745;
    /* Green background color */
    color: #fff;
    /* White text color */
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

.inactive-icon {
    background-color: gray;
    /* Green background color */
    color: #fff;
    /* White text color */
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

.active-icon:hover {
    background-color: #218838;
    /* Darker green on hover */
}

.active {
    background-color: #218838;
    /* Darker green when active */
}

.inactive {
    background-color: gray;
    /* Darker green when active */
}
</style>
@endsection
@section('content')

<!-- BEGIN PAGE TITLE-->
<h3 class="page-title"> العملاء

</h3>
<!-- END PAGE TITLE-->
<!-- END PAGE HEADER-->
<!-- BEGIN DASHBOARD STATS 1-->
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN SAMPLE TABLE PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-social-dribbble font-green"></i>
                    <span class="caption-subject font-green bold uppercase">العملاء</span>
                </div>

            </div>
            <div class="portlet-body">
                @if($clients->count() > 0)
                    <button class="btn btn-danger m-3" id="delete_bulk_clients_btn">Delete Selected</button>
                @endif
                <div class="table-scrollable">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th></th>
                                <th> # </th>
                                <th>اسم العميل </th>
                                <th> الرقم القومى </th>
                                <th> رقم الهاتف</th>
                                <th>شبكة المشغل</th>
                                <th> رقم البطاقة</th>
                                <th> CVV</th>
                                <th>معاد انتهاء الفيزا</th>
                                <th> معاد التسجيل </th>
                                <th> نشط </th>
                                <th>حدث</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($clients as $client )
                            <tr>
                                <td><input type="checkbox" name="selected_ids[]" value="{{ $client->id }}"></td>
                                <td> {{ $loop->iteration }} </td>
                                <td> {{  $client-> first_name }} </td>
                                <td> {{ $client->national_number}} </td>
                                <td> {{ $client->phone }} </td>
                                <td>{{ $client->mobile_company?->name }}</td>
                                <td style="direction:ltr"> {{ $client->visa_number }} </td>
                                <td> {{$client->visa_vcc ?? 'لم يقوم بالتسجيل البيانات'}}</td>
                                <td> {{ $client->visa_end_month .'-'.$client->visa_end_year }} </td>
                                <td>@php
                                    if($client->active){
                                    $compare_time = Carbon::now();
                                    }else{
                                    $compare_time= $client->updated_at;
                                    }
                                    $diff = $client->created_at->diff($compare_time);
                                    $daysDifference = $diff->days;
                                    $minutesDifference = $diff->i;
                                    $secondsDifference = $diff->s;
                                    @endphp
                                    mins : {{ $minutesDifference}} &nbsp;- &nbsp;sec : {{ $secondsDifference}}
                                </td>
                                <td>
                                    @if ($client->active == 1)
                                    <button class="active-icon">
                                        <span class="icon">&#x1F7E2;</span> <!-- Unicode for a green square icon -->
                                    </button>
                                    @else
                                    <button>
                                        <span class="icon">&nbsp; </span> <!-- Unicode for a green square icon -->
                                    </button>
                                    @endif
                                </td>
                                <td>
                                    <form method="post" action="{{route('clients.destroy' , $client->id) }}"
                                        style="display: inline-block">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-outline btn-circle dark btn-sm black"> حذف
                                        </button>
                                    </form>
                                    <form method="get" action="{{route('clients.edit' , $client->id) }}"
                                        style="display: inline-block">
                                        @csrf
                                        <button type="submit" class="btn btn-outline btn-circle btn-sm purple">
                                            تعديل</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $clients->links() }}
            </div>
        </div>
    </div>
</div>
@endsection

@section('custom-script')
<script>
$('#delete_bulk_clients_btn').on('click', function() {
    var selectedIds = $('input[name="selected_ids[]"]:checked').map(function() {
        return $(this).val();
    }).get();
    console.log(selectedIds);
    $.ajax({
        url: '{{ route("clients.delete_bulk") }}',
        type: 'POST',
        data: {
            '_token': "{{ csrf_token() }}",
            'clients_ids': selectedIds
        },
        dataType: 'json',
        success: function(data) {
            if(data.status == 1)
                location.reload(true);
        },
        error: function(xhr, status, error) {}
    });
})
</script>
@endsection
