<?php

Class Server {
    public function checkIfRunning($data=[]) {
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
        $alreadyRunning = $this->checkIfRunning();

        if (!$alreadyRunning['serverRunning']) {
            $command = $this->formatCommand();

            exec(sprintf("%s > %s 2>&1 & echo $! >> %s", $command, './logs/output', './logs/pidfile'));

            return $this->checkIfRunning($data);
        } else {
            $data['errors'] = 'Server already running';
        }

        return $data;
    }

    public function formatCommand() {
        if (!empty($_POST)) {
            return '/home/steam/sandstorm/Insurgency/Binaries/Linux/InsurgencyServer-Linux-Shipping "Farmhouse?Scenario=Scenario_Farmhouse_Checkpoint_Security?Password=ilovesimon" -log -hostname="Simon Server" -QueryPort=27333 -Mods --CmdModList="' . $_POST['modIds'] . '" -mutators=' . $_POST['mutators'] . ' -ModDownloadTravelTo=Tell?Scenario=Scenario_Tell_Checkpoint_Security?Lighting=Day';
        }
        return '/home/steam/sandstorm/Insurgency/Binaries/Linux/InsurgencyServer-Linux-Shipping "Farmhouse?Scenario=Scenario_Farmhouse_Checkpoint_Security?Password=ilovesimon" -log -hostname="Simon Server" -QueryPort=27333 -Mods --CmdModList="150867" -mutators=AllYouCanEat,ISMC_Casual -ModDownloadTravelTo=Tell?Scenario=Scenario_Tell_Checkpoint_Security?Lighting=Day';
    }
}
