$stats = $this->itemStatRepo->getAllItemStatsPaginated();

if ($stats != null)
    return response([
        'data' => $stats,
        'status' => 'success'
    ]);
else
    return response(['error' => 'Unauthorized'], 400);