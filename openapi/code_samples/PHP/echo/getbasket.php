$basketItems = $this->basketItemRepo->getAllBasketItemsPaginated();

if ($basketItems != null)
return response([
    'data' => $basketItems,
    'status' => 'success'
]);
else
    return response(['error' => 'Unauthorized'], 400);