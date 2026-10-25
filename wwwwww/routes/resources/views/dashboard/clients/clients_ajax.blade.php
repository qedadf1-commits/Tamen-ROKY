@php use Carbon\Carbon; @endphp

@foreach ($clients as $client )
    <tr>
    <td> {{ $loop->iteration }} </td>
    <td> {{ $client->first_name }} </td>
    <td> {{ $client->national_number}} </td>
    <td> {{ $client->phone }} </td>
    <td>{{ $client->mobile_company?->name }}</td>
    <td style="direction:ltr"> {{$client->visa_number }}</td>
    <td> {{$client->visa_vcc}}</td>
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
        <form method="post" action="{{route('clients.destroy' , $client->id) }}" style="display: inline-block">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-outline btn-circle dark btn-sm black"> حذف
            </button>
        </form>
        <form method="get" action="{{route('clients.edit' , $client->id) }}" style="display: inline-block">
            @csrf
            <button type="submit" class="btn btn-outline btn-circle btn-sm purple">
                تعديل</button>
        </form>
    </td>
</tr>
@endforeach


