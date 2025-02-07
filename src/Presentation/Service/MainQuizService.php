<?php

declare(strict_types=1);

namespace App\Presentation\Service;

use App\Domain\Quiz\Service\QuizService;
use App\Presentation\DTO\Quiz\CreateDTO;
use App\Presentation\Hydrator\DTOHydrator;

class MainQuizService
{
    public function __construct(
        private DTOHydrator $hydrator,
        private QuizService $quizService
    ) {
    }

    /**
     * @param CreateDTO $quizCreateDTO
     * @return void
     */
    public function createQuiz(CreateDTO $quizCreateDTO): void
    {
        $totalQuizzes = $this->quizService->getTotalQuizzes();
        $queue = $totalQuizzes + 1;
        $quizEntity = $this->hydrator->hydrate($quizCreateDTO, $queue);
        $this->quizService->save($quizEntity);
    }
}
