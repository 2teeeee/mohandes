<x-layout>
    <h3>لیست خطرات</h3>
    <div class="row justify-content-center mt-5">
        <div class="col-md-4 border shadow-sm rounded p-2">
            <div class="flex items-center justify-end mb-2">
                <a href="{{ route("khataratCreate") }}" class="btn btn-success btn-sm">جدید</a>
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">مقدار</th>
                </tr>
                </thead>
                <tbody>
                @foreach($khatarats as $key => $khatar)
                    <tr>
                        <th scope="row">{{$key + 1}}</th>
                        <td>{{ $khatar->value }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layout>
