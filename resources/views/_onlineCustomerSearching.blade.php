<div class = "form-group col-xs-12">
    @if(count($searchCustomer)>0)
        <input type = "text" name = "caller_id" id = "search_customer_text" placeholder = "Search Customer by Name or Caller ID" class = "form-control" value = "{{ $searchCustomer->phone }}" />

    @else
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type = "text" name = "caller_id" id = "search_customer_text" placeholder = "Search Customer by Name or Caller ID" class = "form-control" value = "{{ $searchCustomer->phone }}"/>
    @endif
</div>