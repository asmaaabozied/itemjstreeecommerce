@extends('layouts.main')

@section('title')
    {{ __('Address') }}
@endsection

@section('page-title')
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h4>Show Address</h4>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first"></div>
        </div>
    </div>
@endsection

@section('content')
    <section class="section">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <table class="table-borderless table-striped" aria-describedby="mydesc" id="table_list"
                               data-toggle="table" data-click-to-select="true"
                               data-side-pagination="server" data-pagination="true"
                               data-page-list="[5, 10, 20, 50, 100, 200]" data-search="false" data-toolbar="#toolbar"
                               data-show-columns="true" data-show-refresh="true" data-fixed-columns="true"
                               data-fixed-number="1" data-fixed-right-number="1" data-trim-on-search="false"
                               data-responsive="true" data-sort-name="id" data-sort-order="desc"
                               data-escape="true"
                               data-pagination-successively-size="3" data-query-params="queryParams" data-table="users"
                               data-status-column="deleted_at"
                               data-show-export="true"
                               data-export-options='{"fileName": "customer-list","ignoreColumn": ["operate"]}'
                               data-export-types="['pdf','json', 'xml', 'csv', 'txt', 'sql', 'doc', 'excel']"
                               data-mobile-responsive="true">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col" data-field="id">{{ __('ID') }}</th>
                                <th scope="col" data-field="user.name">{{ __('Name') }}</th>
                                <th scope="col" data-field="address">{{ __('Address') }}</th>
                                <th scope="col" data-field="country.name">{{ __('country') }}</th>
                                <th scope="col" data-field="city.name">{{ __('city') }}</th>
                                <th scope="col" data-field="state.name">{{ __('State') }}</th>
                                <th scope="col" data-field="operate" data-escape="false" data-align="center" data-sortable="false" data-events="userEvents">{{ __('Map Location') }}</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($addresses as $data)

                                <tr>
                                    <th scope="col" data-field="id">{{ $data->id }}</th>
                                    <th scope="col" data-field="user.name">{{ $data->user->name ?? '' }}</th>
                                    <th scope="col" data-field="address">{{ $data->address ?? '' }}</th>
                                    <th scope="col" data-field="country.name">{{ $data->country->name ?? '' }}</th>
                                    <th scope="col" data-field="city.name">{{ $data->city->name ?? '' }}</th>
                                    <th scope="col" data-field="state.name">{{ $data->state->name ?? '' }}</th>
                                    <th scope="col">
                                        @php  $mapUrl = "https://www.google.com/maps?q= {$data->latitude},{$data->longitude}"; @endphp
                                        <a href="{{$mapUrl}}" target="_blank">View on Google Maps</a>
                                    </th>
                                </tr>

                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


    </section>
@endsection
@section('js')
    <script>
        function assignApprovalSuccess() {
            $('#assignPackageModal').modal('hide');
        }

        function resetModal() {
            const modal = $('#assignPackageModal');
            const form = modal.find('form');
            form[0].reset();
        }
    </script>
    </script>
@endsection
