<?php


namespace App\Services;


use App\Models\MessageTemplate;
use App\Repositories\MessageTemplateRepository;
use App\Repositories\MessageTemplateTypeRepository;

class MessageTemplateService
{
    private $MessageTemplateRepository;

    public function __construct(MessageTemplateRepository $MessageTemplateRepository)
    {
        $this->MessageTemplateRepository = $MessageTemplateRepository;

    }

    public function get()
    {
        return $this->MessageTemplateRepository->get();
    }

    public function store($data)
    {
        return $this->MessageTemplateRepository->store($data);
    }

    public function details($id)
    {
        return $this->MessageTemplateRepository->details($id);
    }

    public function update($id, $data)
    {
        return $this->MessageTemplateRepository->update($id, $data);
    }

    public function destroy($id)
    {
        return $this->MessageTemplateRepository->destroy($id);
    }

}
