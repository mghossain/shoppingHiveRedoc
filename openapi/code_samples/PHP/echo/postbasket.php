$attributes = request()->validate([
    'product_id' => 'required'
]);

if ($this->basketItemRepo->isItemInBasket($attributes['product_id'])) {
    return response([
        'status' => 'exists'
    ]);
}

try {
    $basketItem = $this->basketItemRepo->createBasketItem($attributes);
} catch (\Exception $e) {
    return response(['error' => 'Unauthorized'], 400);
}

return response([
    'data' => $basketItem,
    'status' => 'success'
]);