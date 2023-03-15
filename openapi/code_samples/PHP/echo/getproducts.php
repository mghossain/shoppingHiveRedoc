$products = $this->productRepo->getAllProductsPaginated();

if ($products != null)
    return response([
        'data' => $products,
        'status' => 'success'
    ]);
else
    return response(['error' => 'Unauthorized'], 400);