<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <title>Checkout Page</title>
</head>

<body class="bg-gray-100">
  <div class="max-w-2xl mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Checkout</h1>

    <div class="bg-white rounded-md shadow-md p-6">
      <table class="w-full mb-4">
        <thead>
          <tr>
            <th class="text-left">Item</th>
            <th class="text-left">Price</th>
            <th class="text-left">Quantity</th>
            <th class="text-right">Total</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>{{ $menu->getName() }}</td>
            <td>{{ $menu->getPrice() }}</td>
            <td>1</td>
            <td class="text-right">$9.99</td>
          </tr>
          <tr>
            <td colspan="3" class="text-right font-semibold">Subtotal</td>
            <td class="text-right">$64.96</td>
          </tr>
          <tr>
            <td colspan="3" class="text-right font-semibold">Tax (7%)</td>
            <td class="text-right">$4.55</td>
          </tr>
          <tr>
            <td colspan="3" class="text-right font-semibold">Total</td>
            <td class="text-right font-semibold">$69.51</td>
          </tr>
        </tbody>
      </table>


      <button type="button" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Place Order</button>
    </div>
  </div>
</body>

</html>
