<x-app-layout>
    <div class="mx-60">
        <table class="table-auto bg-white mx-54 mt-10 border-solid border-black border-2">
            <thead class="">
                <tr class="py-1 border-solid border-b-4 border-black">
                    <th class="px-8">Id</th>
                    <th class="px-8">Cat</th>
                    <th class="px-16">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr class="border-solid border-black border-2">
                        <td class="px-8">{{ $product->id }}</td>
                        <td class="px-8">{{ $product->productName }}</td>
                        <td class="px-8">
                            <div class="flex flex-row justify-between">
                                <a href="{{ route('product.edit', ['product' => $product->id]) }}">Edit</a>
                                <form class="text-red-600" method="POST" action={{ route('product.destroy', ['product' => $product->id]) }}>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
