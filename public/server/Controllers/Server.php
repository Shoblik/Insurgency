<?php

Class Server {
    public function checkIfRunning($data) {
        $data['serverRunning'] = false;

        exec("pgrep InsurgencyServe", $pids);

        if(!empty($pids)) {
            $data['serverRunning'] = true;
        }

        // Send the data
        return $data;
    }

    public function shutdownServer($data) {
        exec('killall InsurgencyServe');

        return $this->checkIfRunning($data);
    }

    public function startServer($data) {
        $command = $this->formatCommand();

        exec(sprintf("%s > %s 2>&1 & echo $! >> %s", $command, './logs/output', './logs/pidfile'));

        return $this->checkIfRunning($data);
    }

    public function formatCommand() {
        return '/home/steam/sandstorm/Insurgency/Binaries/Linux/InsurgencyServer-Linux-Shipping "Farmhouse?Scenario=Scenario_Farmhouse_Checkpoint_Security?Password=ilovesimon" -log -hostname="Simon Server" -QueryPort=27333 -Mods- GSLTToken=e463a46c64fc6f91b38d11fbef518bee -mutators=AllYouCanEat,TacticalBots';
    }
}
