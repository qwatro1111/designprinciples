<?php

class EmailSender
{
    private Storage $storage;
    //... here we're injecting Storage

    public function reactOnEvent(Event $event): void
    {
        $emails = $this->storage->getEmails($event);
        foreach ($emails as $email) {
            $user = $email->getUser;
            if ($user->isBlocked) {
                continue;
            }
            
            $this->startSending($user);
        }
    }

    private function startSending($user)
    {
        switch ($user->getType()) {
            case 'user':
                $this->sendAds($user);
                $this->sendMainEmail($user);
                break;
            case 'moderator':
                $this->sendMainEmail($user);
                break;
        }
    }

    private function sendAds($user)
    {
        //send random ads
    }

    private function sendMainEmail($user)
    {
        //send main email
    }
}
