<?php
/**
 * Service für Mitglieder.
 *
 * @package VereinsmeiereiPro
 */

declare(strict_types=1);

namespace VereinsmeiereiPro\Services;

use VereinsmeiereiPro\Models\Member;
use VereinsmeiereiPro\Repositories\MemberRepository;

defined('ABSPATH') || exit;

class MemberService
{
    /**
     * Repository.
     */
    private MemberRepository $repository;

    public function __construct()
    {
        $this->repository = new MemberRepository();
    }

    /**
     * Neues Mitglied speichern.
     */
    public function save(Member $member): bool
    {
        return $this->repository->save($member);
    }

    /**
     * Alle Mitglieder laden.
     */
    public function findAll(): array
    {
        return $this->repository->findAll();
    }

    /**
     * Mitglied anhand der ID laden.
     */
    public function findById(int $id): ?array
    {
        return $this->repository->findById($id);
    }

    /**
     * Mitglied aktualisieren.
     */
    public function update(int $id, Member $member): bool
    {
        return $this->repository->update($id, $member);
    }

    /**
     * Mitglied löschen.
     */
    public function delete(int $id): bool
    {
        return $this->repository->delete($id);
    }
}