$ids = request()->input('ids.*.id');
$model = new Basket_item();

try {
    $model->withoutEvents(function () use ($ids) {
        $this->basketItemRepo->deleteBasketItems($ids);
    });
    $model->fireEvent('deleted');
} catch (\Exception $e) {
    return response(['error' => $e.'Unauthorized'], 400);
}

return response([
    'data' => $ids,
    'status' => 'success'
]);